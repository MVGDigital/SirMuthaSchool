<?php

namespace App\Controllers;

use App\Models\VideoBannerModel;
use CodeIgniter\Log\Logger;

class VideoBannerController extends BaseController
{
    public function index()
    {
        $model = new VideoBannerModel();
        $videoBanners = $model->findAll();
        return view('video_list', ['videoBanners' => $videoBanners]);
    }

    public function add()
    {
        $data['banner'] = null;
        return view('add_video_banner', $data);
    }

    public function saveBanner()
    {
        $model = new VideoBannerModel();

        $rules = [
            'video_title' => 'required|max_length[255]',
            'video_link' => 'permit_empty|valid_url',
            'sort_order' => 'required|integer',
            'page' => 'required|max_length[50]',
            'video_file' => 'uploaded[video_file]|mime_in[video_file,video/mp4]|max_size[video_file,51200]',
            'video_thumbnail' => 'permit_empty|uploaded[video_thumbnail]|mime_in[video_thumbnail,image/jpg,image/jpeg,image/png]|max_size[video_thumbnail,10240]',
            'video_poster' => 'permit_empty|uploaded[video_poster]|mime_in[video_poster,image/jpg,image/jpeg,image/png]|max_size[video_poster,10240]',
        ];

        if (!$this->validate($rules)) {
            log_message('error', 'Validation failed: ' . json_encode($this->validator->getErrors()));
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $thumbnail = $this->request->getFile('video_thumbnail');
        $poster = $this->request->getFile('video_poster');
        $videoFile = $this->request->getFile('video_file');
        log_message('debug', 'Video file size: ' . $videoFile->getSize());

        $thumbnailName = '';
        $posterName = '';
        $videoFileName = '';

        if ($videoFile && $videoFile->isValid() && !$videoFile->hasMoved()) {
            $videoFileName = pathinfo($videoFile->getName(), PATHINFO_FILENAME) . '_' . date('Dmy_His') . '.' . $videoFile->getExtension();
            if (!$videoFile->move('uploads/videos', $videoFileName)) {
                return redirect()->back()->withInput()->with('error', 'Failed to upload video file.');
            }
        }

        if ($thumbnail && $thumbnail->isValid() && !$thumbnail->hasMoved()) {
            $thumbnailName = pathinfo($thumbnail->getName(), PATHINFO_FILENAME) . '_' . date('Dmy_His') . '.' . $thumbnail->getExtension();
            $thumbnail->move('uploads/thumbnails', $thumbnailName);
        }

        if ($poster && $poster->isValid() && !$poster->hasMoved()) {
            $posterName = pathinfo($poster->getName(), PATHINFO_FILENAME) . '_' . date('Dmy_His') . '.' . $poster->getExtension();
            $poster->move('uploads/posters', $posterName);
        }

        $data = [
            'video_title' => $this->request->getPost('video_title'),
            'video_link' => $this->request->getPost('video_link'),
            'page' => $this->request->getPost('page'),
            'video_thumbnail' => $thumbnailName,
            'video_poster' => $posterName,
            'video_file' => $videoFileName,
            'sort_order' => $this->request->getPost('sort_order'),
            'is_published' => $this->request->getPost('is_published') ? 1 : 0,
        ];

        if ($model->save($data)) {
            return redirect()->to(base_url('adm1n/videobanner'))->with('success', 'Video Banner saved successfully.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to save banner.');
        }
    }

    public function edit($id)
    {
        $model = new VideoBannerModel();
        $data['banner'] = $model->find($id);
        return view('add_video_banner', $data);
    }

    public function updateBanner($id)
    {
        $model = new VideoBannerModel();

        $rules = [
            'video_title' => 'permit_empty|max_length[255]',
            'video_link' => 'permit_empty|valid_url',
            'sort_order' => 'required|integer',
            'page' => 'required|max_length[50]',
            'video_file' => 'permit_empty|uploaded[video_file]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this-> validator->getErrors());
        }

        $thumbnail = $this->request->getFile('video_thumbnail');
        $poster = $this->request->getFile('video_poster');
        $videoFile = $this->request->getFile('video_file');

        $data = [
            'video_title' => $this->request->getPost('video_title'),
            'video_link' => $this->request->getPost('video_link'),
            'page' => $this->request->getPost('page'),
            'sort_order' => $this->request->getPost('sort_order'),
            'is_published' => $this->request->getPost('is_published') ? 1 : 0,
        ];

        if ($videoFile && $videoFile->isValid() && !$videoFile->hasMoved()) {
            $videoFileName = pathinfo($videoFile->getName(), PATHINFO_FILENAME) . '_' . date('Dmy_His') . '.' . $videoFile->getExtension();
            if (!$videoFile->move('uploads/videos', $videoFileName)) {
                return redirect()->back()->withInput()->with('error', 'Failed to upload video file.');
            }
            $data['video_file'] = $videoFileName;
        }

        if ($thumbnail && $thumbnail->isValid() && !$thumbnail->hasMoved()) {
            $thumbnailName = pathinfo($thumbnail->getName(), PATHINFO_FILENAME) . '_' . date('Dmy_His') . '.' . $thumbnail->getExtension();
            $thumbnail->move('uploads/thumbnails', $thumbnailName);
            $data['video_thumbnail'] = $thumbnailName;
        }

        if ($poster && $poster->isValid() && !$poster->hasMoved()) {
            $posterName = pathinfo($poster->getName(), PATHINFO_FILENAME) . '_' . date('Dmy_His') . '.' . $poster->getExtension();
            $poster->move('uploads/posters', $posterName);
            $data['video_poster'] = $posterName;
        }

        if ($model->update($id, $data)) {
            $this->logger->info('Banner updated successfully.', ['id' => $id, 'data' => $data]);
            return redirect()->to(base_url('adm1n/videobanner'))->with('success', 'Banner updated successfully.');
        } else {
            $this->logger->error('Failed to update banner.', ['id' => $id, 'data' => $data]);
            return redirect()->back()->withInput()->with('error', 'Failed to update banner.');
        }
    }

    public function delete($id)
    {
        $model = new VideoBannerModel();

        if ($model->delete($id)) {
            $this->logger->info('Banner deleted successfully.', ['id' => $id]);
            return redirect()->to(base_url('adm1n/videobanner'))->with('success', 'Banner deleted successfully.');
        } else {
            $this->logger->error('Failed to delete banner.', ['id' => $id]);
            return redirect()->back()->with('error', 'Failed to delete banner.');
        }
    }

    public function togglePublishStatus()
    {
        $model = new VideoBannerModel();
        $id = $this->request->getPost('id');
        $isPublished = $this->request->getPost('is_published') ? 1 : 0;

        if ($model->update($id, ['is_published' => $isPublished])) {
            $this->logger->info('Publish status toggled.', ['id' => $id, 'is_published' => $isPublished]);
            return $this->response->setJSON(['status' => 'success']);
        } else {
            $this->logger->error('Failed to toggle publish status.', ['id' => $id]);
            return $this->response->setJSON(['status' => 'error']);
        }
    }
}
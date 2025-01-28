<?php

namespace App\Models;

use CodeIgniter\Model;

class AnnualEvent extends Model
{
    protected $table = 'alumni_events';
    protected $primaryKey = 'event_id';
    protected $allowedFields = ['event_date', 'title', 'description', 'images', 'published', 'created_at', 'updated_at'];

    public function getEvents()
    {
        return $this->orderBy('created_at', 'DESC')->findAll();
    }

    public function getEventsByYear()
    {
        $events = $this->where('published', 1)
                    ->orderBy('event_date', 'DESC')
                    ->findAll();

        $groupedEvents = [];
        foreach ($events as $event) {
            $year = date('Y', strtotime($event['event_date']));
            $groupedEvents[$year][] = $event;
        }

        return $groupedEvents;
    }
}

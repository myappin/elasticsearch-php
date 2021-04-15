<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types = 1);

namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteCalendarEvent
 * Elasticsearch API name ml.delete_calendar_event
 *
 * NOTE: this file is autogenerated using util/GenerateEndpoints.php
 * and Elasticsearch 7.13.0-SNAPSHOT (ebb67a590736f79b58d59f9d8ccbcc4b5068c88d)
 */
class DeleteCalendarEvent extends AbstractEndpoint
{
    protected $calendar_id;
    protected $event_id;

    public function getURI(): string
    {
        $calendar_id = $this->calendar_id ?? null;
        $event_id = $this->event_id ?? null;

        if (isset($calendar_id) && isset($event_id)) {
            return "/_ml/calendars/$calendar_id/events/$event_id";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.delete_calendar_event');
    }

    public function getParamWhitelist(): array
    {
        return [];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function setCalendarId($calendar_id): DeleteCalendarEvent
    {
        if (isset($calendar_id) !== true) {
            return $this;
        }
        $this->calendar_id = $calendar_id;

        return $this;
    }

    public function setEventId($event_id): DeleteCalendarEvent
    {
        if (isset($event_id) !== true) {
            return $this;
        }
        $this->event_id = $event_id;

        return $this;
    }
}

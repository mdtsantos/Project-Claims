<?php

namespace Claims\Framework\Core;

trait ApplicationHelper {

    /**
     * Fetch database config
     *
     * @return mixed
     */
    public function database()
    {
        return $this['config']['database'];
    }

    /**
     * Fetch mail config
     *
     * @return mixed
     */
    public function mail()
    {
        return $this['config']['mail'];
    }

}

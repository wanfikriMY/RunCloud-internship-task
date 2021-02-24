<?php

class User
{
    //properties
    public $name;
    public $plan;
    public $serverUse = array();

    //methods
    function name($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function subscribe($plan)
    {
        $this->plan = $plan;
    }

    function getSubscribe()
    {
        if (empty($this->plan)) {
            return "plan";
        } else {
            return $this->plan->getName();
        }
    }

    function connectServer($server)
    {
        if ($this->getSubscribe() == "BasicPlan") {
            $count = count($this->serverUse);
            if ($count == 0) {
                array_push($this->serverUse, $server);
            } else {
                print "Number of server usage exceeded";
            }
        } elseif ($this->getSubscribe() == "ProPlan") {
            array_push($this->serverUse, $server);
        } else {
            print "Please Subscribe a plan!";
        }
    }

    function unSubscribe()
    {
        unset($this->plan);
        unset($this->serverUse);
        print "Unsubscribe the plan";
    }
}

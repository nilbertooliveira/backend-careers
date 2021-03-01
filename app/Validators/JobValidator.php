<?php

namespace App\Validators;

use App\Enums\JobStatus;
use Illuminate\Validation\Rule;

class JobValidator
{
    public $rule;
    public $customMessage;

    public function __construct()
    {
        $this->rule = [
            'title' => 'required|max:256',
            'description' => 'required|max:10000',
            'status' => ['required', Rule::in(JobStatus::ACTIVE, JobStatus::INACTIVE)],
            'workplace' => 'array',
            'workplace.state' => 'string',
            'workplace.city' => 'string',
            'workplace.district' => 'string',
            'workplace.number' => 'integer|min:0',
            'salary' => 'numeric|min:0'
        ];
        $this->customMessage = [
            "status.in" => "The :attribute field is invalid, necessary status(" . JobStatus::ACTIVE . ", " . JobStatus::INACTIVE . ")"
        ];
    }
}

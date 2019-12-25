<?php
namespace SecurionPay\Response;

class EvidenceDetails extends AbstractResponse
{

    public function __construct($response)
    {
        parent::__construct($response);
    }

    public function getHasEvidence()
    {
        return $this->get('hasEvidence');
    }

    public function getSubmissionCount()
    {
        return $this->get('submissionCount');
    }


}

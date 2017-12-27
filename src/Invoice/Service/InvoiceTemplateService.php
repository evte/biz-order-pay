<?php

namespace Codeages\Biz\Invoice\Service;

interface InvoiceTemplateService
{
    public function createInvoiceTemplate($invoice);

    public function updateInvoiceTemplate($id, $invoice);

    public function deleteInvoiceTemplate($invoiceId);

    public function searchInvoiceTemplates($conditions, $sort, $start, $limit);

    public function countInvoiceTemplates($conditions);

    public function getInvoiceTemplate($id);

    public function setDefalutTemplate($id);

    public function getDefaultTemplate($userId);
}
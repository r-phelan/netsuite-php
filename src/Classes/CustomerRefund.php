<?php

class CustomerRefund extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $status;
	public $transactionNumber;
	public $customer;
	public $customForm;
	public $balance;
	public $arAcct;
	public $currencyName;
	public $exchangeRate;
	public $address;
	public $total;
	public $currency;
	public $tranDate;
	public $voidJournal;
	public $postingPeriod;
	public $memo;
	public $paymentMethod;
	public $account;
	public $toBePrinted;
	public $tranId;
	public $debitCardIssueNo;
	public $creditCardProcessor;
	public $chargeIt;
	public $pnRefNum;
	public $validFrom;
	public $subsidiary;
	public $department;
	public $class;
	public $location;
	public $creditCard;
	public $ccIsPurchaseCardBin;
	public $ccNumber;
	public $ccProcessAsPurchaseCard;
	public $ccExpireDate;
	public $ccName;
	public $ccStreet;
	public $ccZipCode;
	public $ccApproved;
	public $applyList;
	public $depositList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"status" => "string",
		"transactionNumber" => "string",
		"customer" => "RecordRef",
		"customForm" => "RecordRef",
		"balance" => "float",
		"arAcct" => "RecordRef",
		"currencyName" => "string",
		"exchangeRate" => "float",
		"address" => "string",
		"total" => "float",
		"currency" => "RecordRef",
		"tranDate" => "dateTime",
		"voidJournal" => "RecordRef",
		"postingPeriod" => "RecordRef",
		"memo" => "string",
		"paymentMethod" => "RecordRef",
		"account" => "RecordRef",
		"toBePrinted" => "boolean",
		"tranId" => "string",
		"debitCardIssueNo" => "string",
		"creditCardProcessor" => "RecordRef",
		"chargeIt" => "boolean",
		"pnRefNum" => "string",
		"validFrom" => "dateTime",
		"subsidiary" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"creditCard" => "RecordRef",
		"ccIsPurchaseCardBin" => "boolean",
		"ccNumber" => "string",
		"ccProcessAsPurchaseCard" => "boolean",
		"ccExpireDate" => "dateTime",
		"ccName" => "string",
		"ccStreet" => "string",
		"ccZipCode" => "string",
		"ccApproved" => "boolean",
		"applyList" => "CustomerRefundApplyList",
		"depositList" => "CustomerRefundDepositList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

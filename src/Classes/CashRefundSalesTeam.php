<?php

class CashRefundSalesTeam {
	public $employee;
	public $salesRole;
	public $isPrimary;
	public $contribution;
	static $paramtypesmap = array(
		"employee" => "RecordRef",
		"salesRole" => "RecordRef",
		"isPrimary" => "boolean",
		"contribution" => "float",
	);
}


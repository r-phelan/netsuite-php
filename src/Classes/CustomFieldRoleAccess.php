<?php

class CustomFieldRoleAccess {
	public $role;
	public $accessLevel;
	public $searchLevel;
	static $paramtypesmap = array(
		"role" => "RecordRef",
		"accessLevel" => "CustomizationAccessLevel",
		"searchLevel" => "CustomizationSearchLevel",
	);
}


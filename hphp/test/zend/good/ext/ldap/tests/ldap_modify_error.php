<?hh
<<__EntryPoint>> function main(): void {
require "connect.inc";
$link = ldap_connect_and_bind(test_host(), test_port(), test_user(), test_passwd(), test_protocol_version());
$base = test_base();
// Too few parameters
var_dump(ldap_modify());
var_dump(ldap_modify($link));
var_dump(ldap_modify($link, "$base"));

// Too many parameters
var_dump(ldap_modify($link, "$base", array(), "Additional data"));

// DN not found
var_dump(ldap_modify($link, "cn=not-found,$base", array()));

// Invalid DN
var_dump(ldap_modify($link, "weirdAttribute=val", array()));

$entry = array(
    "objectClass"   => array(
        "top",
        "dcObject",
        "organization"),
    "dc"            => "my-domain",
    "o"             => "my-domain",
);

ldap_add($link, "dc=my-domain,$base", $entry);

$entry2 = $entry;
$entry2["dc"] = "Wrong Domain";

var_dump(ldap_modify($link, "dc=my-domain,$base", $entry2));

$entry2 = $entry;
$entry2["weirdAttribute"] = "weirdVal";

var_dump(ldap_modify($link, "dc=my-domain,$base", $entry2));
echo "===DONE===\n";
//--ldap_delete($link, "dc=my-domain,$base");
}

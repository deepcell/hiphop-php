<?hh
<<__EntryPoint>> function main(): void {
error_reporting(E_ERROR);

var_dump("12" << "0");
var_dump("34" << "1");
var_dump("56" << "2");

echo "===DONE===\n";
}

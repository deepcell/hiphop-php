<?hh
// Copyright (c) Facebook, Inc. and its affiliates. All Rights Reserved.

interface I {
  public function foo(vec<int> $x):int;
}

<<__SoundDynamicCallable>>
interface J extends I {
  public function bar():string;
}

<?hh
// Copyright (c) Facebook, Inc. and its affiliates. All Rights Reserved.

class Evil<T> {}

<<__SoundDynamicCallable>>
interface I {
  public function foo(Evil<int> $x) : Evil<string>;
}

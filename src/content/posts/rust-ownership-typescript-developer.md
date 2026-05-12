---
title: "Ownership semantics in Rust made me a better TypeScript developer"
excerpt: "Learning Rust's borrow checker changed how I reason about state mutations and async data flows in JS."
date: "2025-02-01"
category: "Languages"
---

Learning Rust's borrow checker changed how I reason about state mutations and async data flows in JS.

I didn't expect a language famous for fighting its compiler to make me better at writing JavaScript. But after a year of serious Rust, I noticed I was naturally avoiding patterns in TypeScript that I'd previously accepted as normal: shared mutable state, passing objects by reference carelessly, implicit ownership through closures.

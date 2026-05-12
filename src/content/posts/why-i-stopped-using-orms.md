---
title: "Why I stopped using ORMs for anything non-trivial"
excerpt: "On the hidden complexity cost of abstraction layers, and the case for writing SQL you actually understand."
date: "2025-05-01"
category: "Backend"
---

On the hidden complexity cost of abstraction layers, and the case for writing SQL you actually understand.

When you reach for an ORM, you're trading short-term convenience for long-term opacity. The query you wrote in ten seconds becomes an N+1 problem in six months that takes three days to debug. I've been through this cycle enough times to have a strong opinion: for anything beyond simple CRUD on a handful of tables, write the SQL.

This isn't a contrarian take. It's pattern recognition.

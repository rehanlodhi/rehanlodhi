---
title: "Building a personal monorepo with Turborepo and Nix"
excerpt: "A reproducible setup for managing multiple side-projects without environment drift — from flake.nix to CI."
date: "2025-04-01"
category: "Tooling"
---

A reproducible setup for managing multiple side-projects without environment drift — from flake.nix to CI.

The problem with side-projects is not starting them. It's returning to them six months later and spending a weekend fighting dependency versions before you can write a single line of code. Nix solves this by making your development environment a first-class artifact, versioned alongside your code.

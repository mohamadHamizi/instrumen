# Instrumen - AI Development Guidelines

## Project Overview

This is a legacy Yii2 application currently being maintained and gradually improved.

The primary objective is to preserve existing application behaviour while making small, controlled improvements.

## Runtime

- Framework: Yii2
- PHP runtime: PHP 7.4
- Database: MySQL running locally on the development machine
- Development OS: macOS
- Local PHP version is selected using `phpuse 7.4`

## Critical Rules

1. Maintain PHP 7.4 compatibility.
2. Do not introduce PHP 8.x-only syntax or features.
3. Do not upgrade PHP, Yii2, Composer packages, or other dependencies unless explicitly requested.
4. Never run `composer update` unless explicitly requested.
5. Do not modify `composer.lock` unless dependency changes are explicitly requested.
6. Do not modify database schema unless explicitly requested.
7. Do not delete or rename existing controllers, models, views, routes, database fields, or application functionality without approval.
8. Preserve backward compatibility wherever possible.
9. Prefer minimal changes over large refactors.
10. Do not modify files under `vendor/`.
11. Do not commit credentials, secrets, database dumps, runtime files, or generated files.
12. Before changing existing behaviour, explain what files will be affected and why.

## Development Approach

For each requested change:

1. Inspect the relevant controller, model, view, widget, JavaScript and CSS first.
2. Understand the existing implementation before editing.
3. Identify dependencies and possible side effects.
4. Propose the smallest safe change.
5. Modify only files required for the requested feature.
6. Keep existing coding conventions unless there is a strong reason to change them.
7. Validate PHP 7.4 compatibility.
8. Report exactly which files were modified.
9. Suggest appropriate manual tests after the change.

## Database

The development database is MySQL running on the host machine.

Do not:

- drop tables;
- truncate tables;
- delete production-like data;
- alter schema;
- run destructive migrations;

unless explicitly requested.

Prefer read-only database inspection when investigating behaviour.

## Legacy Code

Legacy or unusual code should not automatically be rewritten.

If old code works, preserve it unless:

- it causes the requested problem;
- it creates a significant security issue;
- modification is necessary for the requested feature.

Explain significant technical debt separately rather than silently refactoring it.

## Security

If credentials, insecure configuration, SQL injection risks, XSS risks, outdated libraries, or other security issues are discovered:

- report them;
- explain their impact;
- do not perform unrelated large-scale security refactoring while implementing another feature.

Security remediation should be handled as a separate controlled change unless immediately required.

## Git

Development work is currently performed on:

`revamp-instrumen`

Keep changes small enough to review using:

`git diff`

Do not commit, push, merge, reset, rebase, or force-push unless explicitly requested.

## Local Testing

The application can be started locally with:

`phpuse 7.4`

followed by:

`php yii serve --port=8000`

Default local URL:

`http://localhost:8000`

After modifications, provide specific pages, actions, or workflows that should be manually tested.

## General Principle

Analyze first, modify second.

When uncertain about legacy behaviour, ask or investigate rather than assuming.

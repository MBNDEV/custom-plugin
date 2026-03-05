# Contributing

## Commit Messages

- First line: concise summary in **imperative mood**, max 72 characters.
- Blank line, then body (if needed): explain the "why", not the "what". Wrap at 72 characters.
- No attribution to individual tools or services.

## Pull Requests

Every PR must include three sections:

### Summary

1-3 bullet points explaining what the PR does and why.

### Changes

List specific files or areas changed, grouped logically.

### Test Plan

Checklist of steps to verify the changes work correctly.

**Guidelines:**

- Keep it concise — reviewers should understand the PR in under 30 seconds.
- Reference related issue numbers when available.

## Release

Use this checklist for every plugin release (`vX.Y.Z`).

1. Update `Version` in `functions.php` (no `v` prefix):

```php
 * Version: 1.2.0
```

2. Run quality checks:

```bash
composer run lint:run
```

3. Commit and merge the release changes to the main branch.
4. Create and push the annotated tag:

```bash
git tag -a v1.2.0 -m "Release v1.2.0"
git push origin v1.2.0
```

5. Publish a GitHub release for the same tag with release notes.

### Release Notes Format

When publishing the release, group notes under:

- **Features**
- **Bug Fixes**
- **Performance**
- **Breaking Changes** (if any)
- **Full Changelog**

Tag (`v1.2.0`) and plugin header version (`1.2.0`) must match. The Plugin Update Checker reads `functions.php` to detect new versions.

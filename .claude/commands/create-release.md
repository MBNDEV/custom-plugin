---
description: Create a release if one does not already exist.
---

Check existing tags and releases.

If the requested version/release already exists:

- Show the existing release/tag
- Do not create a duplicate
- Update the plugin version to match the release version

If it does not exist:

- Inspect commits since the previous tag
- Generate release notes
- Suggest semantic version if not provided
- Create git tag if needed
- Create GitHub release using `gh release create`

Include:

- Highlights
- Bug fixes
- Breaking changes
- Migration notes
- Deployment checklist

Push new release to remote.
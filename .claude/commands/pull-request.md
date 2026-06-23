---
description: Create a pull request if one does not already exist.
---

Check current git branch, status, commits, and remote PR status.

If a PR already exists for this branch:

- Show the PR URL
- Summarize current status
- Do not create a duplicate

If no PR exists:

- Review changed files
- Generate a clear PR title and description
- Run tests/lint/build if available
- Create the PR using `gh pr create`
- Include summary, testing, risks, and rollback notes

---
description: Review current branch changes before merge.
---

Review the current branch compared to the base branch.

Focus on:

- Bugs
- Security issues
- Performance problems
- Breaking changes
- Missing tests
- Unclear or risky code
- Simplify updates logic do not complicate.
- Run `composer run lint:run` to ensure all updates are correct

Do not edit files unless explicitly asked.

Output:

1. Critical issues
2. Recommended fixes
3. Nice-to-have improvements
4. Final merge readiness verdict

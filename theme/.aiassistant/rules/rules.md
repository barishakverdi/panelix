---
apply: always
---

# Agent Instructions

## General Coding Principles

- Do not write more code than necessary.
- Keep solutions simple, focused, and proportional to the requested task.
- Do not introduce unnecessary abstractions, utilities, dependencies, or architectural changes.
- Avoid over-engineering.

## Branching Rules

- Do not create a new branch unless explicitly requested.
- Work within the current branch and existing project structure by default.

## Codebase Awareness

- Before implementing any change, inspect the existing codebase and understand the current structure.
- If there is already a similar component, pattern, utility, animation, or JavaScript behavior, reuse it instead of creating a new one from scratch.
- Follow the existing naming conventions, folder structure, coding style, and architectural decisions.
- Prioritize maintainability and consistency across the project.

## Build Rules

- Do not run a build after every code change.
- Only run the build command when explicitly requested or when fixing build-related errors.
- Do not use build output as a default validation step for every small UI, CSS, or JavaScript change.
- Prefer checking the relevant file, component, or code path directly instead of triggering unnecessary builds.

## UI and JavaScript Implementation

- Implement UI and JavaScript requests in the shortest clean way possible.
- The code should be maintainable, responsive, compatible with modern browsers, stable across page loads and refreshes, and suitable for modern devices.
- Avoid fragile code that depends on timing hacks, unreliable selectors, or duplicated logic.
- Do not introduce heavy JavaScript if the same behavior can be achieved with simpler HTML, CSS, Tailwind, Alpine.js, or existing utilities.

## Frontend Context

The project owner is a UI/UX and Frontend developer who builds dynamic static websites using Tailwind CSS, GSAP, Swiper, Alpine.js, JavaScript, HTML, and CSS.

User interaction details are important. Pay special attention to animations, hover states, focus states, active states, transitions, keyboard usability, responsive behavior, page load behavior, accessibility, and SEO-friendly markup.

## Accessibility and SEO

- Use semantic HTML whenever possible.
- Use real button elements for actions and anchor elements for navigation.
- For interactive elements such as dropdowns, accordions, modals, tabs, mobile menus, sliders, and buttons, use appropriate accessibility attributes.
- Include relevant aria attributes where needed, such as aria-expanded, aria-controls, aria-hidden, aria-current, aria-label, aria-labelledby, and role.
- Make sure interactive elements can be used with a keyboard.
- Do not remove focus styles unless replacing them with a clear accessible alternative.

## Animation and Interaction Rules

- Animations should improve the user experience, not make the interface heavier or harder to use.
- Use existing GSAP, Swiper, Alpine.js, or Tailwind animation patterns if they already exist in the project.
- Avoid animation code that causes layout shifts, page-load flickering, scroll issues, or refresh-related bugs.
- Prefer transform and opacity-based transitions where possible.

## Final Output Expectations

- Provide clean, production-friendly code.
- Keep the solution aligned with the existing project.
- Do not make unrelated changes.
- Do not add comments unless they are useful for understanding non-obvious logic.
- Do not refactor unrelated parts of the project unless explicitly requested.
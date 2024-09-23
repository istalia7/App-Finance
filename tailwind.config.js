/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: "jit",
  content: ["./assets/**/*.js", "./templates/**/*.html.twig"],
  theme: {
    fontFamily: {
      Abril: ["Abril Fatface", "sans-serif"],
    },
    extend: {},
  },
  plugins: [],
  jit: {
    debug: true,
  },
};

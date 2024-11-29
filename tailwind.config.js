/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            boxShadow:{
                'first': "0 2rem 3rem rgba(132, 139, 200, 0.18)",
            }
        },
    },
    plugins: [],
}
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
            },
            gridTemplateColumns:{
                "min-fit-200":"repeat(auto-fit , minmax(200,1fr))",
            }
        },
    },
    plugins: [],
}
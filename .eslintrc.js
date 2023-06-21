module.exports = {
    env: {
        browser: true,
        commonjs: true,
        jest: true,
        node: true
    },
    extends: ['eslint:recommended', 'plugin:prettier/recommended', 'plugin:vue/vue3-recommended', 'prettier'],
    parserOptions: {
        ecmaVersion: 'latest',
        sourceType: 'module'
    },
    plugins: ['prettier'],
    root: true,
    ignorePatterns: ['public/vendor/**'],
    rules: {
        'comma-dangle': 1,
        'no-inner-declarations': 'off',
        'no-undef': 0,
        'no-unused-vars': 'off',
        'vue/no-v-html': 'off',
        'vue/require-default-prop': 'off',
        'prettier/prettier': [
            'error',
            {
                endOfLine: 'auto'
            }
        ],
        quotes: ['warn', 'single', { avoidEscape: true }],
        semi: ['warn', 'never']
    }
}

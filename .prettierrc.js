module.exports = {
    endOfLine: 'lf',
    htmlWhitespaceSensitivity: 'ignore',
    printWidth: 130,
    semi: false,
    singleQuote: true,
    tabWidth: 4,
    trailingComma: 'none',
    useTabs: false,
    vueIndentScriptAndStyle: true,
    plugins: ['@shufo/prettier-plugin-blade'],
    overrides: [
        {
            files: ['*.blade.php'],
            options: {
                tabWidth: 4,
                parser: 'blade'
            }
        }
    ]
}

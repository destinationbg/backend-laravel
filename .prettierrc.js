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

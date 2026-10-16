import { writeFile } from 'node:fs/promises';
import autoprefixer from 'autoprefixer';
import cssnano from 'cssnano';
import postcss from 'postcss';
import { compile } from 'sass';

async function buildStyles(source, target) {
    const compiled = compile(source, {
        style: 'expanded',
        fatalDeprecations: ['import', 'global-builtin'],
    });
    const result = await postcss([
        autoprefixer(),
        cssnano({ preset: ['default', { discardComments: { removeAll: true } }] }),
    ]).process(compiled.css, { from: source, to: target, map: false });
    await writeFile(target, `${result.css}\n`);
}

await buildStyles('build/scss/style.scss', 'styles/style.min.css');

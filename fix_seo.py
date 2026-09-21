import os
import re

seo_dir = '/home/gaurav/htdocs/deolang/views/seo'

for filename in os.listdir(seo_dir):
    if not filename.endswith('.php'): continue
    filepath = os.path.join(seo_dir, filename)
    with open(filepath, 'r') as f:
        content = f.read()

    # 1. Remove pt-24 from the main wrapper and add dark theme base classes
    content = re.sub(r'<div class="min-h-screen[^"]*pt-24">', 
                     r'<div class="font-sans text-zinc-200 bg-zinc-900 overflow-x-hidden selection:bg-yellow-500 selection:text-zinc-900">', content)
    
    # 2. Wrap {{ use_nav }} in the fixed header (like home page)
    content = content.replace('{{ use_nav }}', 
                              '<header class="bg-zinc-900/80 backdrop-blur text-zinc-200 fixed w-full top-0 z-50">\n    {{ use_nav }}\n  </header>\n  <main class="pt-24">')
    
    # Add closing main tag before footer
    content = content.replace('{{ use_footer }}', '  </main>\n  {{ use_footer }}')
    
    # 3. Replace theme colors (indigo/blue/purple/emerald/cyan to yellow/zinc)
    content = re.sub(r'bg-(indigo|blue|purple|slate|white)', 'bg-zinc', content)
    content = re.sub(r'text-(indigo|blue|purple|slate)-[123456789]00', 'text-zinc-300', content)
    content = re.sub(r'text-(indigo|blue|purple)-600', 'text-yellow-500', content)
    content = re.sub(r'from-(indigo|blue|purple)-[123456789]00', 'from-yellow-400', content)
    content = re.sub(r'to-(cyan|purple|indigo)-[123456789]00', 'to-yellow-600', content)
    content = re.sub(r'bg-(indigo|blue|purple)-600', 'bg-yellow-500', content)
    content = re.sub(r'hover:bg-(indigo|blue|purple)-[56]00', 'hover:bg-yellow-400', content)
    content = re.sub(r'bg-(indigo|blue|purple|cyan|emerald)-100', 'bg-yellow-500/10', content)
    content = re.sub(r'text-(indigo|blue|purple|cyan|emerald)-600', 'text-yellow-500', content)
    
    # Text color tweaks for dark theme
    content = content.replace('text-zinc-900', 'text-white')
    content = content.replace('text-slate-900', 'text-white')
    content = content.replace('bg-white', 'bg-zinc-900')
    content = content.replace('bg-slate-50', 'bg-zinc-800')
    content = content.replace('bg-zinc-50', 'bg-zinc-800')
    content = content.replace('border-slate-200', 'border-zinc-800')
    content = content.replace('border-slate-100', 'border-zinc-800')
    content = content.replace('border-zinc-200', 'border-zinc-800')
    content = content.replace('text-slate-600', 'text-zinc-400')
    content = content.replace('text-zinc-600', 'text-zinc-400')
    content = content.replace('text-zinc-700', 'text-zinc-300')
    content = content.replace('text-slate-700', 'text-zinc-300')
    
    # 4. Insert DeoLang Name
    content = re.sub(r'(Enterprise Software|Custom Software|ERP Software|App Development|IT Solutions)(.*?in Jorhat|in Assam)', r'\1 by DeoLang \2', content, count=1)
    
    with open(filepath, 'w') as f:
        f.write(content)

print("Done")

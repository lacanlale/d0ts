# This code is primarily used to copy the relevant dot files 
# to update this repo (GIT -> LOCAL)
from pathlib import Path
from shutil import copyfile

def replace_qute(target_path):
    print("=== Replacing qutebrowser config ===")
    source = Path().absolute() / 'configs/config.py'
    try:
        copyfile(source, target_path / '.config/qutebrowser/config.py')
        print(f"\tSuccessfully replaced {source}")
    except IOError as e:
        print(f"\tUnable to replace {source}. {e}")


def replace_vim(target_path):
    print("=== Replacing vim config ===")
    source = Path().absolute() / 'configs/.vimrc'
    try:
        copyfile(source, target_path / '.vimrc')
        print(f"\tSuccessfully replaced {source}")
    except IOError as e:
        print(f"\tUnable to replace .vimrc. {e}")
    

def replace_zsh(target_path):
    print("=== Replacing zsh config ===")
    sources = ['.p10k.zsh', '.zshrc']
    for source in sources:
        try:
            copyfile(Path().absolute() / f'configs/{source}', target_path / source)
            print(f"\tSuccessfully replaced {source}")
        except IOError as e:
            print(f"\tUnable to replace {source}. {e}")


def replace_i3(target_path):
    print("=== Replacing i3 config ===")
    sources = ['i3', 'i3status']
    for source in sources:
        try:
            copyfile(Path().absolute() / f'configs/{source}/config', target_path / f'.config/{source}/config')
            print(f"\tSuccessfully replaced {source}")
        except IOError as e:
            print(f"\tUnable to replace {source}. {e}")
    

configs = [
        replace_vim,
        replace_zsh,
        replace_i3
        ]
target_path = Path.home()
for cfg in configs:
    cfg(target_path)

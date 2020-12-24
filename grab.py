# This code is primarily used to copy the relevant dot files 
# to update this repo (LOCAL -> GIT)
from pathlib import Path
from shutil import copyfile

def grab_qute(target_path):
    print("=== Grabbing qutebrowser config ===")
    source = Path.home() / '.config/qutebrowser/config.py'
    try:
        copyfile(source, target_path / 'config.py')
        print(f"\tSuccessfully grabbed {source}")
    except IOError as e:
        print(f"\tUnable to grab {source}. {e}")


def grab_vim(target_path):
    print("=== Grabbing vim config ===")
    source = Path.home() / '.vimrc'
    try:
        copyfile(source, target_path / '.vimrc')
        print(f"\tSuccessfully grabbed {source}")
    except IOError as e:
        print(f"\tUnable to grab .vimrc. {e}")
    

def grab_zsh(target_path):
    print("=== Grabbing zsh config ===")
    sources = ['.p10k.zsh', '.zshrc']
    for source in sources:
        try:
            copyfile(Path.home() / source, target_path / source)
            print(f"\tSuccessfully grabbed {source}")
        except IOError as e:
            print(f"\tUnable to grab {source}. {e}")


def grab_i3(target_path):
    print("=== Grabbing i3 config ===")
    sources = ['i3', 'i3status']
    for source in sources:
        try:
            copyfile(Path.home() / f".config/{source}/config", target_path / f'{source}/config')
            print(f"\tSuccessfully grabbed {source}")
        except IOError as e:
            print(f"\tUnable to grab {source}. {e}")
    

configs = [
        grab_vim,
        grab_zsh,
        grab_i3
        ]
target_path = Path().absolute() / 'configs'
for cfg in configs:
    cfg(target_path)

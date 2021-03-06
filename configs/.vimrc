" Basic Highlighting
syntax on

" Set encoding
set encoding=utf-8

" Disable errorbells
set noerrorbells

" 4 characters long and 4 spaces long
set tabstop=4 softtabstop=4

" Amount of shift
set shiftwidth=4

" Convert from tab to spaces
set expandtab

" Smart indentiation
set smartindent

" Set line numbers
set nu

" Enable line wrapping
set wrap
set linebreak
set nolist

" Case sensitive searching
set smartcase

" No other files will be swapped out
set noswapfile


" Undo stuff
set nobackup
set undodir=~/.vim/undodir
set undofile

" Show results during search
set incsearch

" Show column for characters
set colorcolumn=80
highlight ColorColumn ctermbg=0 guibg=lightgrey

"""""""""""
" PLUGINS "
"""""""""""
call plug#begin('~/.vim/plugged')

Plug 'morhetz/gruvbox' " Colorscheme
Plug 'https://github.com/ycm-core/YouCompleteMe.git' " Autocomplete
Plug 'vim-airline/vim-airline' " Airline
Plug 'vim-airline/vim-airline-themes' " Airline themes
Plug 'git@github.com:907th/vim-auto-save.git' " AutoSave
Plug 'git@github.com:tpope/vim-surround.git' " Surround
Plug 'git@github.com:preservim/tagbar.git' " Tagbar for class info
Plug 'lervag/vimtex' " Latex for Vim
Plug 'mhinz/vim-startify' " Startup Page
Plug 'vim-vdebug/vdebug' " Debugger

call plug#end()
"""""""""""

" Colorscheme settings 
colorscheme gruvbox
set background=dark

" Search git root and allow git ignore for
" faster searching
if executable('rg')
    let g:rg_derive_root='true'
end

let mapleader=" " " Remap leader key
let maplocalleader="\\"  " Remap local leader
let g:netrw_browse_split=2
let g:netrw_banner=0

" Window remaps
nnoremap <leader>h :wincmd h<CR>
nnoremap <leader>j :wincmd j<CR>
nnoremap <leader>k :wincmd k<CR>
nnoremap <leader>l :wincmd l<CR>

" Window splitting
nnoremap <leader>pv :wincmd v<bar> :Ex <bar> :vertical resize 30<CR>
nnoremap <leader>ph :split <bar> :Ex <bar> :res 30<CR>

" Window Resizing
nnoremap <silent> <Leader>= :vertical resize +5<CR>
nnoremap <silent> <Leader>- :vertical resize -5<CR>
nnoremap <silent> <Leader>+ :resize +5<CR>
nnoremap <silent> <Leader>_ :resize -5<CR>

" YCM remaps
nnoremap <silent> <Leader>gd :YcmCompleter GoTo<CR>
nnoremap <silent> <Leader>gf :YcmCompleter FixIt<CR>

" Airline configs
let g:airline_section_z = '%{strftime("%H:%M %b %d")}'
let g:airline_section_y = 'BN:%{bufnr("%")}'
let g:airline_theme = 'angr'
let g:airline_powerline_fonts = 1

" AutoSave
let g:auto_save = 1

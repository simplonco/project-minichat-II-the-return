all:
	pandoc README.md -o README.tex; pandoc README.tex -o README.pdf
	pandoc README_FR.md -o README_FR.tex; pandoc README_FR.tex -o README_FR.pdf

clean:
	rm -f *.pdf *.tex

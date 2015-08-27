FROM python:2.7.10
ENV DEBIAN_FRONTEND noninteractive
ENV HOME            /root
ENV LC_ALL          C.UTF-8
ENV LANG            en_US.UTF-8
ENV LANGUAGE        en_US.UTF-8
RUN apt-get update && apt-get install imagemagick libmagick++-dev libgraphicsmagick1-dev libjpeg-dev libjpeg-turbo8-dev libjpeg62-dev libjpeg8-dev zlib1g-dev libfreetype6-dev libxft-dev libffi-dev gcc g++ make libz-dev libfreetype6-dev liblcms-dev libxml2-dev libxslt-dev ocaml-nox git-core python-imaging python-lxml\
 texlive-latex-recommended ploticus dvipng imagemagick -y

RUN pip install --trusted-host pypi.pediapress.com -i http://pypi.pediapress.com/simple/ mwlib && \
 pip install reportlab && \
 pip install --trusted-host pypi.pediapress.com -i http://pypi.pediapress.com/simple/ mwlib.rl && \
 (cd /tmp && wget https://www.pdflabs.com/tools/pdftk-the-pdf-toolkit/pdftk-2.02-1.el6.x86_64.rpm && rpm –Uvh pdftk-2.02-1.el6.x86_64.rpm)

RUN pip install supervisor --pre
ADD supervisord.conf /etc/
 
EXPOSE 8899

CMD["supervisord"]







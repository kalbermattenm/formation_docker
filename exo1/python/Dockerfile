FROM python:3.6.5-stretch

LABEL Maintainer="michael.kalbermatten@ne.ch" vendor="SITN"

COPY api.py ./

COPY requirements.txt ./

RUN pip install --no-cache-dir -r requirements.txt

CMD ["python", "api.py"]

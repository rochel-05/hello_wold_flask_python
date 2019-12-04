FROM python:3.7

RUN mkdir /app
WORKDIR /app
ADD . /app/
RUN pip install --no-cache-dir -r requirements.txt

EXPOSE 5000
CMD ["python", "/app/main.py"]

import requests

# url = 'http://talendjobtest01.gvl.local:8040/services/core/1.0/businessobjects/search?response_mode=id'
# url = 'http://talendjob01.gvl.local:8040/services/core/1.0/businessobjects/search?response_mode=id'
url = 'http://192.168.23.41:8040/api/iot'

headers = {'content-type':'application/json'}

data = '''{
    "datetime":"2018-11-01 06:40"
    "temperature":"8"
}'''
response = requests.post(url, headers=headers, data=data)
print(response.status_code)
#print(response.json())


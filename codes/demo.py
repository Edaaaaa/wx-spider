import requests
host = 'xxxx'       #服务器ip
auth = 'xxxx'       #auth
biz  = 'xxxx'       #公众号biz
request_url = host+"/Home/info/get_newprofile"

payload = {'auth': auth,'biz': biz}
headers = {}
response = requests.request("POST", request_url, headers=headers, data = payload)
print(response.text)

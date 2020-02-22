import requests
host = 'xxxx'       #服务器ip
auth = 'xxxx'       #auth
art_url = 'xxxx'    #文章链接
request_url = host+"/Home/info/get_read_num"

payload = {'auth': auth,'url': art_url}
headers = {}
response = requests.request("POST", request_url, headers=headers, data = payload)
print(response.text)

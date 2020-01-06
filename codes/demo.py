#import requests


auth = 'xxxx'   #联系作者获取
biz = 'xxx'     #公众号biz, 如果不会获取,请参考get_biz.php代码
url = "http://121.196.196.117/Home/info/get_newprofile?auth="+auth+"&biz="+biz

payload = {}
headers= {}

response = requests.request("GET", url, headers=headers, data = payload)

print(response.text.encode('utf8'))

import requests

url = "http://192.168.137.141/setRoom"
def sendPost(name=None, ty=None):
	params = {
		"name": name,
		"type": ty
	}
	x = requests.post(url, data=params)
	return x.text


def main():
	res = sendPost(name="ouki", ty="red");
	print(res)

if __name__ == "__main__":
	main()
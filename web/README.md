# Threat Modeling on Chain (TMOC)

TMOC (Threat Modeling on Chain) is a tool that combines a blockchain-based collective intelligence system and threat modeling. 

## Requirements

TMOC is designed as a Block Chain application.
<!--

remix_solidity | Web Server | c
------- | ----------- | --------
0.5.1+commit<br>contents 2<br>contents 3 | Apache/2.4.29 (Ubuntu)<br>PHP 7.2.24-0ubuntu0.18.04.10 (cli)<br>contents 3 | contents 1<br>contents 2<br>contents 3


> Table Description
-->
Connect to Solidity
- You need to access "http://remix.ethereum.org/" and compile the file [solidity](https://github.com/SANELab/TMOC/solidity) repo.
- You need to connect the metamask by opening the console window of the remix page and entering the following command.
```
ethereum.request({ method: 'eth_requestAccounts' });
```

- Contents 3

<!-- 주의사항 
:exclamation: **Caution: TMOC is n!!!!!**
-->
## Installation
TMOC can be installed Metamask and Webserver.

- Install git
```
sudo apt-get install -y git
```

- Install TMOC
```
https://github.com/SANELab/TMOC.git
```

- Install Apache2 & php
```
sudo apt-get install apache2
apache2 -v
sudo apt install net-tools
sudo apt-get install php
sudo service apache2 restart
```

- Copy to Apache Directory
```
sudo cp -r /TMOC /var/www/html/
```

-Connect TMOC Web Site
```
connet web "http://localhost/TMOC"
```


## Usage <!-- TMOC 실행하는 방법 -->
<!--
You can start TMOC by executing the -----.

```sh
$ ./command
```
-->
Afterwards TMOC can be accessed on <http://localhost:80> and <https://localhost> (nginx), respectively.  
<!--
## Publications / Presentations

### Conference Name

We've been happy to show TMOC in a number of --- sessions.
-->
## License
```
    Copyright (C) 2022 SANELab
```

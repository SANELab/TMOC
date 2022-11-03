// 컴파일된 solidity 파일에서 선언된 함수/구조체 등을 json 형태의 변수로 선언
const abi = [
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "tree_score",
		"outputs": [
			{
				"name": "user_id",
				"type": "string"
			},
			{
				"name": "tree_number",
				"type": "string"
			},
			{
				"name": "tree_score",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_user_id",
				"type": "string"
			},
			{
				"name": "_tree_number",
				"type": "string"
			},
			{
				"name": "_tree_score",
				"type": "uint256"
			}
		],
		"name": "sol_addTreeScore",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "librarys",
		"outputs": [
			{
				"name": "no",
				"type": "uint256"
			},
			{
				"name": "lib_element",
				"type": "string"
			},
			{
				"name": "stride",
				"type": "string"
			},
			{
				"name": "content",
				"type": "string"
			},
			{
				"name": "url",
				"type": "string"
			},
			{
				"name": "lib_writer",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "lib_score",
		"outputs": [
			{
				"name": "user_id",
				"type": "string"
			},
			{
				"name": "lib_number",
				"type": "string"
			},
			{
				"name": "lib_score",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "threats",
		"outputs": [
			{
				"name": "threat_number",
				"type": "uint256"
			},
			{
				"name": "threat_element",
				"type": "string"
			},
			{
				"name": "threat_detail",
				"type": "string"
			},
			{
				"name": "threat_reason",
				"type": "string"
			},
			{
				"name": "lib_number",
				"type": "string"
			},
			{
				"name": "threat_writer",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_threat_number",
				"type": "uint256"
			},
			{
				"name": "_threat_element",
				"type": "string"
			},
			{
				"name": "_threat_detail",
				"type": "string"
			},
			{
				"name": "_threat_reason",
				"type": "string"
			},
			{
				"name": "_lib_number",
				"type": "string"
			},
			{
				"name": "_threat_writer",
				"type": "string"
			}
		],
		"name": "sol_addThreat",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "threat_score",
		"outputs": [
			{
				"name": "user_id",
				"type": "string"
			},
			{
				"name": "threat_number",
				"type": "string"
			},
			{
				"name": "threat_score",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_user_id",
				"type": "string"
			},
			{
				"name": "_threat_number",
				"type": "string"
			},
			{
				"name": "_threat_score",
				"type": "uint256"
			}
		],
		"name": "sol_addThreatScore",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "_idx",
				"type": "uint256"
			}
		],
		"name": "sol_getTree",
		"outputs": [
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "trees",
		"outputs": [
			{
				"name": "tree_number",
				"type": "string"
			},
			{
				"name": "tree_hash",
				"type": "string"
			},
			{
				"name": "tree_uploader",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_user_id",
				"type": "string"
			},
			{
				"name": "_lib_number",
				"type": "string"
			},
			{
				"name": "_lib_score",
				"type": "uint256"
			}
		],
		"name": "sol_addLibraryScore",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "_idx",
				"type": "uint256"
			}
		],
		"name": "sol_getThreat",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "_idx",
				"type": "uint256"
			}
		],
		"name": "sol_getLibrary",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_no",
				"type": "uint256"
			},
			{
				"name": "_lib_element",
				"type": "string"
			},
			{
				"name": "_stride",
				"type": "string"
			},
			{
				"name": "_content",
				"type": "string"
			},
			{
				"name": "_url",
				"type": "string"
			},
			{
				"name": "_lib_writer",
				"type": "string"
			}
		],
		"name": "sol_addLibrary",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "sol_getTotal",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_tree_number",
				"type": "string"
			},
			{
				"name": "_tree_hash",
				"type": "string"
			},
			{
				"name": "_tree_uploader",
				"type": "string"
			}
		],
		"name": "sol_addTree",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"name": "no",
				"type": "uint256"
			},
			{
				"indexed": false,
				"name": "lib_element",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "stride",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "content",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "url",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "lib_writer",
				"type": "string"
			}
		],
		"name": "sol_attacklibrary",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"name": "threat_number",
				"type": "uint256"
			},
			{
				"indexed": false,
				"name": "threat_element",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "threat_detail",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "threat_reason",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "lib_number",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "threat_writer",
				"type": "string"
			}
		],
		"name": "sol_threat",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"name": "tree_number",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "tree_hash",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "tree_uploader",
				"type": "string"
			}
		],
		"name": "sol_tree",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"name": "user_id",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "threat_number",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "threat_score",
				"type": "uint256"
			}
		],
		"name": "sol_threatscore",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"name": "user_id",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "lib_number",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "lib_score",
				"type": "uint256"
			}
		],
		"name": "sol_libscore",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"name": "user_id",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "tree_number",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "tree_score",
				"type": "uint256"
			}
		],
		"name": "sol_treescore",
		"type": "event"
	}
];
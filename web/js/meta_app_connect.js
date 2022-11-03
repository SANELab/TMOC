if(typeof web3 !== "undefined"){
  web3 = new Web3(web3.currentProvider);
  console.log("Metamask connected");
  ethereum.request({ method: 'eth_requestAccounts' });
} else {
  console.log("No Metamask");
}

//input contract address
const contractAddress = "0xfEF3f99abDBcc9a30a23F19f9757e623980c637a";

const smartContract = web3.eth.contract(abi).at(contractAddress);

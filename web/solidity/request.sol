pragma solidity >=0.4.22 < 0.7.0;

contract RequestRegistry {

    struct Bounty {
        uint128 guid;
        address author;
        uint256 amount;
        string artifactURI;
        uint256 numArtifacts;
        uint256 expirationBlock;
        address assignedArbiter;
        bool quorumReached;
        uint256 quorumBlock;
        uint256 quorumMask;
    }

    event NewBounty(
        uint128 guid, // Model ID or Request ID
        address customer,
        uint256 amount
    );
    
    event SettleBounty(
        uint128 bountyGuid,
        address settler,
        uint256 payout
    );

    uint128[] public bountyGuids;
    mapping (uint128 => Bounty) public bountiesByGuid;
    
    uint256 public constant BOUNTY_FEE = 50000000000000000; // 0.05 eth
    uint256 public constant BOUNTY_AMOUNT_MINIMUM = 1000000000000000000; // 1 eth

    function postBounty(
        address customer,
        uint256 amount
    ) public payable{
        require(customer == address(0), "GUID already in use");
        require(amount >= BOUNTY_AMOUNT_MINIMUM, "Bounty amount below minimum.");
    }

}


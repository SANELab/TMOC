pragma solidity >=0.4.22 < 0.7.0;


// 클래스 선언??
contract TMOCContract {
    uint total;
    struct myLib {
        uint no;
        string lib_element;
        string stride;
        string content;
        string url;
        string lib_writer;
	}
	struct myThreat {
        uint threat_number;
        string threat_element;
        string threat_detail;
        string threat_reason;
        string lib_number;
        string threat_writer;
    }
    struct myTree {
        string tree_number;
        string tree_hash;
        string tree_uploader;
    }
    struct myThreatScoring {
        string user_id;
        string threat_number;
        uint threat_score;
    }
    struct myLibraryScoring {
        string user_id;
        string lib_number;
        uint lib_score;
    }
    struct myTreeScoring {
        string user_id;
        string tree_number;
        uint tree_score;
    }
    // 공격라이브러리 변수선언
    event sol_attacklibrary (
        uint no,
        string lib_element,
        string stride,
        string content,
        string url,
        string lib_writer
    );
    // 위협식별 변수선언
    event sol_threat(
        uint threat_number,
        string threat_element,
        string threat_detail,
        string threat_reason,
        string lib_number,
        string threat_writer
    );
    // 공격트리 변수선언
    event sol_tree(
        string tree_number,
        string tree_image,
        string tree_uploader
    );
    // 위협점수 변수선언
    event sol_threatscore (
        string user_id,
        string threat_number,
        uint threat_score
    );
    // 라이브러리점수 변수선언
    event sol_libscore (
        string user_id,
        string lib_number,
        uint lib_score
    );
    // 공격트리점수 변수선언
    event sol_treescore (
        string user_id,
        string tree_number,
        uint tree_score
    );

    // 공격 라이브러리 등록 및 확인
	myLib[] public librarys;
    
	/* 사용자가 입력한 공격라이브러리를 등록 */
    function sol_addLibrary (uint _no, string memory _lib_element, string memory _stride, string memory _content, string memory _url, string memory _lib_writer) public {
        librarys.push(myLib(_no, _lib_element, _stride, _content, _url, _lib_writer));
        total++;
        emit sol_attacklibrary(_no, _lib_element, _stride, _content, _url, _lib_writer);
    }

    /* 번호에 해당하는 라이브러리를 리턴 */
    function sol_getLibrary(uint _idx) public view returns (uint, string memory, string memory, string memory, string memory, string memory) {
        return (librarys[_idx].no, librarys[_idx].lib_element, librarys[_idx].stride, librarys[_idx].content, librarys[_idx].url, librarys[_idx].lib_writer);
    }


    // 위협 등록 및 확인
    myThreat[] public threats;

    /* 사용자가 입력한 위협을 등록 */
    function sol_addThreat (uint _threat_number, string memory _threat_element, string memory _threat_detail, string memory _threat_reason, string memory _lib_number, string memory _threat_writer) public {   // modified from cks
        threats.push(myThreat(_threat_number, _threat_element, _threat_detail, _threat_reason, _lib_number, _threat_writer));   // modified from cks
        total++;
        emit sol_threat(_threat_number, _threat_element, _threat_detail, _threat_reason, _lib_number, _threat_writer);
    }

    /* 번호에 해당하는 위협을 리턴 */
    function sol_getThreat(uint _idx) public view returns (uint, string memory, string memory, string memory, string memory, string memory) {
        return (threats[_idx].threat_number, threats[_idx].threat_element, threats[_idx].threat_detail, threats[_idx].threat_reason, threats[_idx].lib_number, threats[_idx].threat_writer);
    }

    // 공격트리 등록 및 확인
    myTree[] public trees;

    /* 사용자가 입력한 공격트리를 등록 */
    function sol_addTree (string memory _tree_number, string memory _tree_hash, string memory _tree_uploader) public {
        trees.push(myTree(_tree_number, _tree_hash, _tree_uploader));
        total++;
        emit sol_tree(_tree_number, _tree_hash, _tree_uploader);
    }

    /* 번호에 해당하는 공격트리를 리턴 */
    function sol_getTree(uint _idx) public view returns (string memory, string memory, string memory) {
        return (trees[_idx].tree_number, trees[_idx].tree_hash, trees[_idx].tree_uploader);
    }

    // 위협 평가
    myThreatScoring[] public threat_score;

    /* 사용자가 입력한 위협 점수를 등록 */
    function sol_addThreatScore (string memory _user_id, string memory _threat_number, uint _threat_score) public {
        threat_score.push(myThreatScoring(_user_id, _threat_number, _threat_score));
        total++;
        emit sol_threatscore(_user_id, _threat_number, _threat_score);
    }

    // 라이브러리 평가
    myLibraryScoring[] public lib_score;

    /* 사용자가 입력한 라이브러리 점수를 등록 */
    function sol_addLibraryScore (string memory _user_id, string memory _lib_number, uint _lib_score) public {
        lib_score.push(myLibraryScoring(_user_id, _lib_number, _lib_score));
        total++;
        emit sol_libscore(_user_id, _lib_number, _lib_score);
    }

    // 공격트리 평가
    myTreeScoring[] public tree_scores;

    /* 사용자가 입력한 공격트리 점수를 등록 */
    function sol_addTreeScore (string memory _user_id, string memory _tree_number, uint _tree_score) public {
        tree_scores.push(myTreeScoring(_user_id, _tree_number, _tree_score));
        total++;
        emit sol_treescore(_user_id, _tree_number, _tree_score);
    }

    // 전체 트랜잭션 개수 확인
    function sol_getTotal() public view returns (uint) {
        return total;
    }
 
    address payable public performer;
    
    constructor(address payable receiver) public payable {
        performer = receiver;
    }

    function sol_sendtoken(uint coin) public {
        require(address(this).balance > coin, "Insufficient Funds");
        performer.transfer(coin);
    }

 


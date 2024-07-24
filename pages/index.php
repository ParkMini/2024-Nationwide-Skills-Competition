<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>세계문화도시경주</title>
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <header>
    <ul id="nav">
      <!-- 로고 이미지 -->
      <li>
        <img src="../assets/logo.png" alt="로고" title="로고" />
      </li>
      <!-- 주 메뉴 -->
      <li id="mainNav">
        <ul>
          <li>
            <span class="mainNavTitle">경주여행</span>
            <ul>
              <li><a href="#">이벤트</a></li>
              <li><a href="#">여행코스추천</a></li>
              <li><a href="#">테마여행</a></li>
              <li><a href="#">경주의 자연</a></li>
            </ul>
          </li>
          <li>
            <span class="mainNavTitle">문화행사</span>
            <ul>
              <li><a href="#">이달의 축제행사</a></li>
              <li><a href="#">정기 축제행사</a></li>
              <li><a href="#">공연전시 정보</a></li>
              <li><a href="#">해외공연 정보</a></li>
            </ul>
          </li>
          <li>
            <span class="mainNavTitle">안내</span>
            <ul>
              <li><a href="#">조직도</a></li>
              <li><a href="#">공지사항</a></li>
              <li><a href="#">홍보영상</a></li>
              <li><a href="#">여행책자</a></li>
            </ul>
          </li>
          <li>
            <span class="mainNavTitle">나의여행</span>
            <ul>
              <li><a href="#">투어택시예약</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <!-- 로그인 및 회원가입 -->
      <li id="loginNav">
        <ul>
          <li><a href="#loginModal">로그인</a></li>
          <li><a href="#joinModal">회원가입</a></li>
        </ul>
      </li>
    </ul>
  </header>

  <div id="slide">
    <div id="slider">
      <img src="../assets/프레젠테이션1/슬라이드1.PNG" alt="슬라이드 이미지1" title="슬라이드 이미지1" />
      <img src="../assets/프레젠테이션1/슬라이드2.PNG" alt="슬라이드 이미지2" title="슬라이드 이미지2" />
      <img src="../assets/프레젠테이션1/슬라이드3.PNG" alt="슬라이드 이미지3" title="슬라이드 이미지3" />
    </div>
    <div id="progressBar"></div>
  </div>

  <div id="hotspot">
    <input type="radio" name="hotspot" id="전체" checked />
    <input type="radio" name="hotspot" id="신라대종" />
    <input type="radio" name="hotspot" id="대릉원돌담길" />
    <input type="radio" name="hotspot" id="첨성대" />
    <input type="radio" name="hotspot" id="경주계림" />
    <input type="radio" name="hotspot" id="월성" />
    <input type="radio" name="hotspot" id="동궁과월지" />
    <div id="labels">
      <label for="전체">전체</label>
      <label for="신라대종">신라대종</label>
      <label for="대릉원돌담길">대릉원돌담길</label>
      <label for="첨성대">첨성대</label>
      <label for="경주계림">경주계림</label>
      <label for="월성">월성</label>
      <label for="동궁과월지">동궁과 월지</label>
    </div>
    <br>
    <div id="img">
      <img src="../A-Module-제공파일/제공파일/핫스팟/hotspot.png" alt="지도" title="지도" />
      <div id="신라대종설명" class="description">
        <h1>신라대종</h1>
        <p>
          국보 제29호인 성덕대왕신종을 현대적 기술로 재현한 종이다.
          성덕대왕신종은 신라 35대 경덕왕때 만들기 시작해 36대인 혜공왕 때 완성되었다.
          1,200여 년 동안 서라벌 전역에 울려 퍼졌으나 1992년 타종을 마지막으로 더 이상 울리지 않게 되었다.
          경주시가 성덕대왕신종의 정신과 가치를 이은 새로운 종을 주조한 것이다.
      </div>
      <div id="대릉원돌담길설명" class="description">
        <h1>대릉원 돌담길</h1>
        <p>
          돌담길 양옆으로 벚나무가 심어져 있어 따뜻한 봄이면 아름다운 벚꽃 터널을 이룬다. 돌담길 사이사이 아름
          다운 시를 새겨넣은 패가 걸려 있어 여유롭게 돌담길을 걸으며 잊었던 문학적 감성도 채울 수 있다.
      </div>
      <div id="첨성대설명" class="description">
        <h1>첨성대</h1>
        <p>
          국보 제31호로, 천체의 움직임을 관찰하던 신라 시대의 천문 기상 관측대다.
          받침대 역할을 하는 기단부위에 술병 모양의 원통 부를 올리고 맨 위에 정자형 정상부를 얹은 모습이며, 높이는 약 9m다. 신라
          선덕여왕 때 세운 것으로 추측되며, 동양에서 가장오래된 천문대로서 그 가치가 매우 높다.
      </div>
      <div id="경주계림설명" class="description">
        <h1>경주계림</h1>
        <p>
          김 씨 왕조의 시조, 김알지의 탄생 설화가 깃든 숲, 계림은 원래 성스러운 숲이란 뜻의 ‘시림’으로 불렸는데,
          닭과 관련된 김알지의 탄생설화 때문에 닭이 우는 숲이란 뜻의 계림으로 불리게 되었다.
      </div>
      <div id="월성설명" class="description">
        <h1>월성</h1>
        <p>
          사적 제16호로, 신라 궁궐이 있던 도성이다. 성의 모양이 반달처럼 생겼다 하여 ‘반월성’이라고도 부른다.
          언덕 위에 흙과 돌을 이용해 반월형 성을 쌓았는데, 이곳에 신라 역대 왕들의 궁성이 있었다고 기록돼 있다.
          드넓은 초록 들판이 펼쳐져 있어 풍경을 바라보며 한적하게 걷기 좋다.
      </div>
      <div id="동궁과월지설명" class="description">
        <h1>동궁과 월지</h1>
        <p>
          동궁과 월지는 신라 조경예술의 극치를 보여준다.
          동서 길이 200m, 남북 길이 180m인 월지는 남서쪽의 둘레는 직선인데 반해 북동쪽은 구불구불한 곡선으로 되어 있다.
          특히 동궁과 월지의 야경은 아름답기로 유명한데, 조명을 받아 호수에 반사되는 풍경은 잊을 수 없는 경주의 추억을 선사한다.
      </div>
      </p>
    </div>
  </div>

  <div id="gyongju4season">
    <input type="radio" name="gyongju4season" id="봄" checked>
    <input type="radio" name="gyongju4season" id="여름">
    <input type="radio" name="gyongju4season" id="가을">
    <input type="radio" name="gyongju4season" id="겨울">
    <label for="봄">봄</label>
    <label for="여름">여름</label>
    <label for="가을">가을</label>
    <label for="겨울">겨울</label>
    <div id="spring" class="gyongju4seasonGallery">
      <img src="../A-Module-제공파일/제공파일/경주사계/봄/경주시화개나리.jpg" alt="">
    </div>
    <div id="summer" class="gyongju4seasonGallery">
      <img src="../A-Module-제공파일/제공파일/경주사계/여름/관성해수욕장.JPG" alt="">
    </div>
    <div id="autumn" class="gyongju4seasonGallery">
      <img src="../A-Module-제공파일/제공파일/경주사계/가을/경북산림환경연구원.jpg" alt="">
    </div>
    <div id="winter" class="gyongju4seasonGallery">
      <img src="../A-Module-제공파일/제공파일/경주사계/겨울/경주읍성설경.JPG" alt="">
    </div>
  </div>

  <div id="cultureEvent">
    <h1>문화 축제</h1>
    <input type="radio" name="cultureEvent" id="c0" checked>
    <input type="radio" name="cultureEvent" id="c1">
    <input type="radio" name="cultureEvent" id="c2">
    <input type="radio" name="cultureEvent" id="c3">
    <input type="radio" name="cultureEvent" id="c4">
    <input type="radio" name="cultureEvent" id="c5">
    <input type="radio" name="cultureEvent" id="c6">
    <input type="radio" name="cultureEvent" id="c7">
    <input type="radio" name="cultureEvent" id="c8">

    <div id="content">
      <label for="c1"><img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주EDM페스티벌.jpeg" alt="">
        <p>경주EDM페스티벌</p>
      </label>
      <label for="c2"><img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주국악여행.jpg" alt="">
        <p>경주국악여행</p>
      </label>
      <label for="c3"><img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주국제뮤직페스티벌.png" alt="">
        <p>경주국제뮤직페스티벌</p>
      </label>
      <label for="c4"><img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주문화제야행.jpg" alt="">
        <p>경주문화제야행</p>
      </label>
      <label for="c5"><img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주EDM페스티벌.jpeg" alt="">
        <p>경주EDM페스티벌</p>
      </label>
      <label for="c6"><img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주국악여행.jpg" alt="">
        <p>경주국악여행</p>
      </label>
      <label for="c7"><img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주국제뮤직페스티벌.png" alt="">
        <p>경주국제뮤직페스티벌</p>
      </label>
      <label for="c8"><img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주문화제야행.jpg" alt="">
        <p>경주문화제야행</p>
      </label>
    </div>

    <div id="cim1" class="imgModal">
      <img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주EDM페스티벌.jpeg" alt="">
      <label for="c0">닫기</label>
    </div>
    <div id="cim2" class="imgModal">
      <img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주국악여행.jpg" alt="">
      <label for="c0">닫기</label>
    </div>
    <div id="cim3" class="imgModal">
      <img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주국제뮤직페스티벌.png" alt="">
      <label for="c0">닫기</label>
    </div>
    <div id="cim4" class="imgModal">
      <img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주문화제야행.jpg" alt="">
      <label for="c0">닫기</label>
    </div>
    <div id="cim5" class="imgModal">
      <img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주EDM페스티벌.jpeg" alt="">
      <label for="c0">닫기</label>
    </div>
    <div id="cim6" class="imgModal">
      <img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주국악여행.jpg" alt="">
      <label for="c0">닫기</label>
    </div>
    <div id="cim7" class="imgModal">
      <img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주국제뮤직페스티벌.png" alt="">
      <label for="c0">닫기</label>
    </div>
    <div id="cim8" class="imgModal">
      <img src="../A-Module-제공파일/제공파일/문화행사/2024%20경주문화제야행.jpg" alt="">
      <label for="c0">닫기</label>
    </div>
  </div>

  <div id="statistics">
    <h1>월별 경상북도 방문계 통계</h1>
    <table>
      <tr>
        <th>월별</th>
        <th>중화권</th>
        <th>일본</th>
        <th>미국</th>
        <th>기타</th>
        <th>합계</th>
      </tr>
      <tr>
        <td>1월</td>
        <td>1,000명</td>
        <td>2,000명</td>
        <td>3,000명</td>
        <td>4,000명</td>
        <td>10,000명</td>
      </tr>
      <tr>
        <td>2월</td>
        <td>1,100명</td>
        <td>2,100명</td>
        <td>3,100명</td>
        <td>4,100명</td>
        <td>10,001명</td>
      </tr>
      <tr>
        <td>3월</td>
        <td>1,200명</td>
        <td>2,200명</td>
        <td>3,200명</td>
        <td>4,200명</td>
        <td>10,002명</td>
      </tr>
      <tr>
        <td>4월</td>
        <td>1,300명</td>
        <td>2,300명</td>
        <td>3,300명</td>
        <td>4,300명</td>
        <td>10,003명</td>
      </tr>
      <tr>
        <td>5월</td>
        <td>1,400명</td>
        <td>2,400명</td>
        <td>3,400명</td>
        <td>4,400명</td>
        <td>10,004명</td>
      </tr>
      <tr>
        <td>6월</td>
        <td>1,500명</td>
        <td>2,500명</td>
        <td>3,500명</td>
        <td>4,500명</td>
        <td>10,005명</td>
      </tr>
      <tr>
        <td>7월</td>
        <td>1,600명</td>
        <td>2,600명</td>
        <td>3,600명</td>
        <td>4,600명</td>
        <td>10,006명</td>
      </tr>
      <tr>
        <td>8월</td>
        <td>1,700명</td>
        <td>2,700명</td>
        <td>3,700명</td>
        <td>4,700명</td>
        <td>10,007명</td>
      </tr>
    </table>
  </div>

  <div id="recommendTravelCourse">
    <input type="radio" name="recommendTravelCourseSelector" id="동해안투어">
    <input type="radio" name="recommendTravelCourseSelector" id="세계유산투어">
    <input type="radio" name="recommendTravelCourseSelector" id="신라역사투어">
    <div id="recommendTravelCourseLabels">
      <label for="동해안투어">동해안투어</label>
      <label for="세계유산투어">세계유산투어</label>
      <label for="신라역사투어">신라역사투어</label>
    </div>

    <div id="동해안투어추천" class="recommendTravelCourseRecommend">
      <div>
        <span>경주전통명주전시관</span>
        <img src="../A-Module-제공파일/제공파일/여행코스/동해안투어/경주전통명주전시관.jpg" alt="">
      </div>
      <div>
        <img src="../A-Module-제공파일/제공파일/여행코스/동해안투어/감은사지.jpg" alt="">
        <span>감은사지</span>
      </div>
      <div>
        <span>문무대왕릉</span>
        <img src="../A-Module-제공파일/제공파일/여행코스/동해안투어/문무대왕릉.jpg" alt="">
      </div>
      <div>
        <img src="../A-Module-제공파일/제공파일/여행코스/동해안투어/양남주상절리.jpg" alt="">
        <span>양남주상절리</span>
      </div>
      <div>
        <span>굴골사</span>
        <img src="../A-Module-제공파일/제공파일/여행코스/동해안투어/굴골사.jpg" alt="">
      </div>
      <div>
        <img src="../A-Module-제공파일/제공파일/여행코스/동해안투어/괘릉.jpg" alt="">
        <span>괘릉</span>
      </div>
    </div>

    <div id="세계유산투어추천" class="recommendTravelCourseRecommend">
      <div>
        <span>무열왕릉</span>
        <img src="../A-Module-제공파일/제공파일/여행코스/세계유산투어/무열왕릉.jpg" alt="">
      </div>
      <div>
        <img src="../A-Module-제공파일/제공파일/여행코스/세계유산투어/대릉원.png" alt="">
        <span>대릉원</span>
      </div>
      <div>
        <span>분황사</span>
        <img src="../A-Module-제공파일/제공파일/여행코스/세계유산투어/분황사.jpg" alt="">
      </div>
      <div>
        <img src="../A-Module-제공파일/제공파일/여행코스/세계유산투어/석굴암.jpg" alt="">
        <span>석굴암</span>
      </div>
      <div>
        <span>불국사</span>
        <img src="../A-Module-제공파일/제공파일/여행코스/세계유산투어/불국사.jpg" alt="">
      </div>
    </div>

    <div id="신라역사투어추천" class="recommendTravelCourseRecommend">
      <div>
        <span>김유신장군묘</span>
        <img src="../A-Module-제공파일/제공파일/여행코스/신라역사투어/김유신장군묘.jpg" alt="">
      </div>
      <div>
        <img src="../A-Module-제공파일/제공파일/여행코스/신라역사투어/국립경주박물관.jpg" alt="">
        <span>국립경주박물관</span>
      </div>
      <div>
        <span>황룡사역사문화관</span>
        <img src="../A-Module-제공파일/제공파일/여행코스/신라역사투어/황룡사역사문화관.jpg" alt="">
      </div>
      <div>
        <img src="../A-Module-제공파일/제공파일/여행코스/신라역사투어/불국사.jpg" alt="">
        <span>불국사</span>
      </div>
      <div>
        <span>경주세계문화엑스포</span>
        <img src="../A-Module-제공파일/제공파일/여행코스/신라역사투어/경주세계문화엑스포.jpg" alt="">
      </div>
    </div>
  </div>

  <div id="loginModal" class="cmodal">
    <div class="cmodalBody">
      <h1>로그인</h1>
      <input type="text" placeholder="아이디"><br>
      <input type="text" placeholder="비밀번호"><br>
      <a href="#"><button>확인</button></a>
    </div>
  </div>

  <div id="joinModal" class="cmodal">
    <div class="cmodalBody">
      <h1>회원가입</h1>
      <input type="text" placeholder="아이디"><br>
      <input type="text" placeholder="비밀번호"><br>
      <input type="text" placeholder="성명"><br>
      <input type="text" placeholder="회원구분"><br>
      <a href="#"><button>확인</button></a>
    </div>
  </div>

  <div id="companyTable">
    <h1>조직도</h1>
    <ul>
      <li>
        <div class="node">경주시민</div>
        <ul>
          <li>
            <div class="node">문화사업팀</div>
            <ul>
              <li>
                <div class="node">유네스코부</div>
                <ul>
                  <li>
                    <div class="node">양동마을</div>
                    <ul>
                      <li>
                        <div class="node">불국사</div>
                        <ul>
                          <li>
                            <div class="node">대릉원</div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li>
                <div class="node">경주관광부</div>
                <ul>
                  <li>
                    <div class="node">북부권</div>
                    <ul>
                      <li>
                        <div class="node">남부권</div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <div class="node">전통문화부</div>
            <ul>
              <li>
                <div class="node">서원</div>
                <ul>
                  <li>
                    <div class="node">옥산서원</div>
                  </li>
                  <li>
                    <div class="node">운곡서원</div>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <div class="node">공연사업팀</div>
            <ul>
              <li>
                <div class="node">국제공연부</div>
              </li>
              <li>
                <div class="node">국내공연부</div>
              </li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>


  <footer>
    <img src="../assets/logo.png" alt="로고" title="로고" style="filter: grayscale(1)" width="128px" />
    <div id="footerMenu">
      <p><a href="#">개인정보처리방침</a></p>
      <p><a href="#">저작권보호</a></p>
      <p><a href="#">사이트오류신고</a></p>
    </div>
    <p>
      [38102] 경상북도 경주시 양정로 260 (동천동, 경주시청)<br />
      대표전화 : 054-779-8585<br />
      관광안내전화 1330 응급전화안내 1339<br />
      Copyright 2024 Gyeongju Tourguide. All rights reserved.
    </p>
    <div id="socialMedia">
      <img src="../A-Module-제공파일/제공파일/footer/SNS_01.png" alt="소셜 미디어" title="소셜 미디어" width="30px" />
      <img src="../A-Module-제공파일/제공파일/footer/SNS_02.png" alt="소셜 미디어" title="소셜 미디어" width="30px" />
      <img src="../A-Module-제공파일/제공파일/footer/SNS_03.png" alt="소셜 미디어" title="소셜 미디어" width="30px" />
      <img src="../A-Module-제공파일/제공파일/footer/SNS_04.png" alt="소셜 미디어" title="소셜 미디어" width="30px" />
    </div>
  </footer>
</body>

</html>
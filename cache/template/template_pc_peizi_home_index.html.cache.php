﻿<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<div style="background: #fff;">

    <!-- banner与区域 -->
    <div class="pz-banner">
        <div class="pz-banner-inner">
            <div class="statistics">已收录配资平台&nbsp;&nbsp;<a href="http://peizizhishu.com/plateform">764</a>&nbsp;&nbsp;家
            </div>
            <div class="yiji">查配资指数 peizizhishu.com 选正规配资平台</div>
            <img src="picture/mob_code.png" alt="" class="mob-img">
            <div class="index-form-box">
                <ul class="tab-box" id="search-column">
                    <li class="tab-box-active" data-value="plateform_name">平台名称</li>
                    |
                    <li data-value="plateform_url">网址</li>
                    |
                    <li data-value="company_name">公司名称</li>
                    |
                    <li data-value="plateform_province">地区</li>
                </ul>
                <form method="get" action="http://peizizhishu.com/plateform" id="search-form">
                    <input class="seach-words" type="text" name="wd" placeholder="输入平台名称"/>
                    <input type="hidden" name="column" value="plateform_name">
                    <input type="hidden" name="search_token"
                           value="eyJpdiI6IlJSNGdyK3hGMDF3WHNxS0VkVXpyeVE9PSIsInZhbHVlIjoiYmRKQkptaGhnNUdza3RaS21ScEEzMWhtZTBMOVNuWFwvQSt5Q0M1aU9ERGhuVGdRXC9zN2VNYnlQbG9hNWtkY1N5IiwibWFjIjoiY2FiYzE2YjMwZWYxZjYyYWY0YmE1NDVhYjliMzc1YWFiYTA3OTNlMmU4ODk1YzZhNDY1MGE0MmI0N2NlZGIyYyJ9">
                    <input class="seach-btn" type="submit" name="" value="&nbsp;&nbsp;&nbsp;&nbsp;"/>

                    <!-- 输入提示 -->
                    <ul class="input-prompt">
                        <li>无查询结果</li>
                    </ul>
                </form>
                <ul class="hot-search">热搜词汇：
                    <li><a style="color:#FFF"
                           href="http://peizizhishu.com/plateform?wd=%E9%BC%8E%E6%B3%BD%E9%85%8D%E8%B5%84&amp;search_token=eyJpdiI6IlJSNGdyK3hGMDF3WHNxS0VkVXpyeVE9PSIsInZhbHVlIjoiYmRKQkptaGhnNUdza3RaS21ScEEzMWhtZTBMOVNuWFwvQSt5Q0M1aU9ERGhuVGdRXC9zN2VNYnlQbG9hNWtkY1N5IiwibWFjIjoiY2FiYzE2YjMwZWYxZjYyYWY0YmE1NDVhYjliMzc1YWFiYTA3OTNlMmU4ODk1YzZhNDY1MGE0MmI0N2NlZGIyYyJ9">鼎泽配资</a>
                    </li>
                    <li><a style="color:#FFF"
                           href="http://peizizhishu.com/plateform?wd=%E7%82%B9%E7%82%B9%E7%89%9B&amp;search_token=eyJpdiI6IlJSNGdyK3hGMDF3WHNxS0VkVXpyeVE9PSIsInZhbHVlIjoiYmRKQkptaGhnNUdza3RaS21ScEEzMWhtZTBMOVNuWFwvQSt5Q0M1aU9ERGhuVGdRXC9zN2VNYnlQbG9hNWtkY1N5IiwibWFjIjoiY2FiYzE2YjMwZWYxZjYyYWY0YmE1NDVhYjliMzc1YWFiYTA3OTNlMmU4ODk1YzZhNDY1MGE0MmI0N2NlZGIyYyJ9">点点牛</a>
                    </li>
                    <li><a style="color:#FFF"
                           href="http://peizizhishu.com/plateform?wd=%E6%93%8D%E7%9B%98%E6%89%80&amp;search_token=eyJpdiI6IlJSNGdyK3hGMDF3WHNxS0VkVXpyeVE9PSIsInZhbHVlIjoiYmRKQkptaGhnNUdza3RaS21ScEEzMWhtZTBMOVNuWFwvQSt5Q0M1aU9ERGhuVGdRXC9zN2VNYnlQbG9hNWtkY1N5IiwibWFjIjoiY2FiYzE2YjMwZWYxZjYyYWY0YmE1NDVhYjliMzc1YWFiYTA3OTNlMmU4ODk1YzZhNDY1MGE0MmI0N2NlZGIyYyJ9">操盘所</a>
                    </li>
                    <li><a style="color:#FFF"
                           href="http://peizizhishu.com/plateform?wd=%E5%85%A8%E6%B0%91%E9%A1%BE%E6%8A%95&amp;search_token=eyJpdiI6IlJSNGdyK3hGMDF3WHNxS0VkVXpyeVE9PSIsInZhbHVlIjoiYmRKQkptaGhnNUdza3RaS21ScEEzMWhtZTBMOVNuWFwvQSt5Q0M1aU9ERGhuVGdRXC9zN2VNYnlQbG9hNWtkY1N5IiwibWFjIjoiY2FiYzE2YjMwZWYxZjYyYWY0YmE1NDVhYjliMzc1YWFiYTA3OTNlMmU4ODk1YzZhNDY1MGE0MmI0N2NlZGIyYyJ9">全民顾投</a>
                    </li>
                    <li><a style="color:#FFF"
                           href="http://peizizhishu.com/plateform?wd=%E5%A4%A7%E5%9C%A3%E9%85%8D%E8%B5%84&amp;search_token=eyJpdiI6IlJSNGdyK3hGMDF3WHNxS0VkVXpyeVE9PSIsInZhbHVlIjoiYmRKQkptaGhnNUdza3RaS21ScEEzMWhtZTBMOVNuWFwvQSt5Q0M1aU9ERGhuVGdRXC9zN2VNYnlQbG9hNWtkY1N5IiwibWFjIjoiY2FiYzE2YjMwZWYxZjYyYWY0YmE1NDVhYjliMzc1YWFiYTA3OTNlMmU4ODk1YzZhNDY1MGE0MmI0N2NlZGIyYyJ9">大圣配资</a>
                    </li>
                    <li><a style="color:#FFF"
                           href="http://peizizhishu.com/plateform?wd=%E4%B9%BE%E5%AF%8C%E7%AD%96%E7%95%A5&amp;search_token=eyJpdiI6IlJSNGdyK3hGMDF3WHNxS0VkVXpyeVE9PSIsInZhbHVlIjoiYmRKQkptaGhnNUdza3RaS21ScEEzMWhtZTBMOVNuWFwvQSt5Q0M1aU9ERGhuVGdRXC9zN2VNYnlQbG9hNWtkY1N5IiwibWFjIjoiY2FiYzE2YjMwZWYxZjYyYWY0YmE1NDVhYjliMzc1YWFiYTA3OTNlMmU4ODk1YzZhNDY1MGE0MmI0N2NlZGIyYyJ9">乾富策略</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- 主体区域 -->
    <div id="pz-content">
        <!-- 表格 -->

        <div class="pz-index-table">
            <table id="table">
                <thead>
                <tr>
                    <th>平台名称</th>
                    <th>LOGO</th>
                    <th>所在地区</th>
                    <th>股票/期货</th>
                    <th>安全性</th>
                    <th>配资成本</th>
                    <th>上线时间</th>
                    <th class="th-title">配资指数</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>
                        <a href="http://peizizhishu.com/plateform_detail/308.html" class="pz-name">老财牛
                            <img class="operate-state" src="picture/shipan_1.png"/>
                        </a>
                        <a href="http://www.peizizhishu.com/link?url=http%3A%2F%2Fwww.cnh168.com" target="_blank"
                           class="web-site">www.cnh168.com</a>
                    </td>
                    <td>
                        <a class="pz-logo" href="http://peizizhishu.com/plateform_detail/308.html">
                            <img src="picture/109e8de4-6297-49a0-a586-b66ca0e0549f.png">
                        </a>
                    </td>
                    <td>重庆市/市辖区</td>
                    <td>股票</td>
                    <td>
                        <div class="xingji xingji-3"></div>
                    </td>
                    <td>月息：1.8%</td>
                    <td>2016.10</td>
                    <td>
                        <div class="zhishu normal-color" style="text-align: center;">
                            683
                            <span class="exponential sheng">&uarr;37</span>
                        </div>
                    </td>
                    <td>
                        <div class="pingjia">
                            <a href="http://peizizhishu.com/plateform_detail/308.html">评价</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="http://peizizhishu.com/plateform_detail/787.html" class="pz-name">盈透股配
                            <img class="operate-state" src="picture/shipan_1.png"/>
                        </a>
                        <a href="http://www.peizizhishu.com/link?url=http%3A%2F%2Fwww.yingtoukeji.com.cn"
                           target="_blank" class="web-site">www.yingtoukeji.com.cn</a>
                    </td>
                    <td>
                        <a class="pz-logo" href="http://peizizhishu.com/plateform_detail/787.html">
                            <img src="picture/a18a8a65-83cb-4fb0-b2ec-9bbb417aaefb.png">
                        </a>
                    </td>
                    <td>北京市/市辖区</td>
                    <td>股票</td>
                    <td>
                        <div class="xingji xingji-3"></div>
                    </td>
                    <td>月息：1.5%</td>
                    <td>2019.02</td>
                    <td>
                        <div class="zhishu normal-color" style="text-align: center;">
                            422
                            <span class="exponential sheng">&uarr;45</span>
                        </div>
                    </td>
                    <td>
                        <div class="pingjia">
                            <a href="http://peizizhishu.com/plateform_detail/787.html">评价</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="http://peizizhishu.com/plateform_detail/472.html" class="pz-name">鑫福网
                        </a>
                        <a href="http://www.peizizhishu.com/link?url=http%3A%2F%2Fwww.xinfu888.com" target="_blank"
                           class="web-site">www.xinfu888.com</a>
                    </td>
                    <td>
                        <a class="pz-logo" href="http://peizizhishu.com/plateform_detail/472.html">
                            <img src="picture/fb0380ec-174a-4770-aab6-4a11c2de09e8.png">
                        </a>
                    </td>
                    <td>广东省/佛山市</td>
                    <td>股票</td>
                    <td>
                        <div class="xingji xingji-2"></div>
                    </td>
                    <td>月息：2.0%</td>
                    <td>2018.11</td>
                    <td>
                        <div class="zhishu normal-color" style="text-align: center;">
                            396
                            <span class="exponential jiang">&darr;13</span>
                        </div>
                    </td>
                    <td>
                        <div class="pingjia">
                            <a href="http://peizizhishu.com/plateform_detail/472.html">评价</a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="handle-btn">
                <a href="http://peizizhishu.com/commit_applying" style="background: #56b0f2;margin-right: 16px;"
                   class="btn-join">加入我们</a>
                <a href="http://peizizhishu.com/plateform?status=1" style="background: #ff9000;"
                   class="btn-more">查看更多</a>
            </div>
        </div>
        <!-- 我们能做什么 -->
        <div class="pz-ability">
            <div class="ability-title">
                <h3>我们能做些什么？</h3>
                <div>WHAT CAN WE DO?</div>
            </div>
            <div class="ability-box">
                <div class="ability-box-item">
                    <img src="picture/xuanze.png"/><br>
                    选择正规配资平台
                </div>
                <div class="ability-box-item">
                    <img src="picture/bao.png"/><br>
                    曝光问题配资平台
                </div>
                <div class="ability-box-item">
                    <img src="picture/liaojie.png"/><br>
                    深度了解配资行业
                </div>
            </div>
        </div>

        <!--配资指数资讯 -->
        <ul id="news_box">
            <li>
                <div class="enpty_box">
                    <div class="news_list">
                        <div class="list_top">
                            <div class="list_left">配资指数观点</div>
                            <div class="list_right"><a href="http://peizizhishu.com/post_list/7">更多>></a></div>
                        </div>
                        <ul class="list_bottom">
                            <li>
                                <a href="http://peizizhishu.com/post_detail/610">股票配资欺诈平台，关于是否实盘最新狡辩说辞。</a>
                                <span>2019-03-08</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/550">维权：广大配友在股票配资维权过程中，该收集哪些材料？</a>
                                <span>2019-01-10</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/549">维权：配资维权，法院公安不予受理，该如何操作？</a>
                                <span>2019-01-10</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/548">维权：当配资平台跑路了，投资人应该如何维护自身权益？</a>
                                <span>2019-01-10</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/547">维权：股票配资纠纷中，如何通过民事诉讼追偿？</a>
                                <span>2019-01-10</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/546">维权：配资过程中利益受到侵害通过什么途径维权？</a>
                                <span>2019-01-10</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="enpty_box">
                    <div class="news_list">
                        <div class="list_top">
                            <div class="list_left">股票配资</div>
                            <div class="list_right"><a href="http://peizizhishu.com/post_list/2">更多>></a></div>
                        </div>
                        <ul class="list_bottom">
                            <li>
                                <a href="http://peizizhishu.com/post_detail/605">MACD的技术应用实例，超透彻讲解。</a>
                                <span>2019-02-02</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/602">券商业绩全面承压 如今业绩不到当初三成</a>
                                <span>2019-01-27</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/596">A股春节前后有望向2700点演绎 将是普涨行情</a>
                                <span>2019-01-21</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/594">两市频现高管增持 部分增持规模超5000万元</a>
                                <span>2019-01-20</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/587">制定细则落地 券商推进许多产品整改</a>
                                <span>2019-01-19</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/580">暴跌8成！香港内资地产股狂跌是什么意思？</a>
                                <span>2019-01-18</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="enpty_box">
                    <div class="news_list">
                        <div class="list_top">
                            <div class="list_left">配资动态</div>
                            <div class="list_right"><a href="http://peizizhishu.com/post_list/4">更多>></a></div>
                        </div>
                        <ul class="list_bottom">
                            <li>
                                <a href="http://peizizhishu.com/post_detail/604">期货配资有哪些特点？</a>
                                <span>2019-02-01</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/603">期货配资过程中如果出现亏损应该怎么办？</a>
                                <span>2019-02-01</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/600">2019年期货市场必将在品种创新之路上越走越远</a>
                                <span>2019-01-21</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/597">中国2018年GDP同比增长6.6% 经济总量首次突破90万亿</a>
                                <span>2019-01-21</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/588">黑色系领涨 铁矿石、螺纹钢涨超1％</a>
                                <span>2019-01-19</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/586">中行获批发行400亿元无固定期限资本债券</a>
                                <span>2019-01-19</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="enpty_box">
                    <div class="news_list">
                        <div class="list_top">
                            <div class="list_left">股市动态</div>
                            <div class="list_right"><a href="http://peizizhishu.com/post_list/5">更多>></a></div>
                        </div>
                        <ul class="list_bottom">
                            <li>
                                <a href="http://peizizhishu.com/post_detail/601">美国政府改变状态 道指收涨近200点</a>
                                <span>2019-01-27</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/595">2019年伊始沪指突破2600点</a>
                                <span>2019-01-21</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/592">金融市场历史惊人的相似</a>
                                <span>2019-01-20</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/589">增量资金接踵进场 A股中期趋势渐乐观</a>
                                <span>2019-01-19</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/582">三大指数全线涨超1% 上证开始活跃</a>
                                <span>2019-01-18</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/576">有问题也要罚 影视明星炒股冷暖自知</a>
                                <span>2019-01-18</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="enpty_box">
                    <div class="news_list">
                        <div class="list_top">
                            <div class="list_left">金融资讯</div>
                            <div class="list_right"><a href="http://peizizhishu.com/post_list/6">更多>></a></div>
                        </div>
                        <ul class="list_bottom">
                            <li>
                                <a href="http://peizizhishu.com/post_detail/606">新增人民币贷款及社融增量均创单月新高</a>
                                <span>2019-02-15</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/599">经济寡淡收官 未来并不悲观</a>
                                <span>2019-01-21</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/593">1436家农商行大洗牌 银保监会设置各类监管细则</a>
                                <span>2019-01-20</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/584">力减6000亿税赋！财政部发文公布减税新政！</a>
                                <span>2019-01-19</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/583">2019年春节前央行净投放1.7万亿！ 意欲何为？</a>
                                <span>2019-01-19</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/579">银行为吸储多多优惠 定存产品发售就被“秒光”</a>
                                <span>2019-01-18</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="enpty_box">
                    <div class="news_list">
                        <div class="list_top">
                            <div class="list_left">市场万象</div>
                            <div class="list_right"><a href="http://peizizhishu.com/post_list/9">更多>></a></div>
                        </div>
                        <ul class="list_bottom">
                            <li>
                                <a href="http://peizizhishu.com/post_detail/607">年初社融、信贷双双创历史新高 信贷支持实体增强</a>
                                <span>2019-02-17</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/598">业界预测经济形势：GDP增速全年将前低后高</a>
                                <span>2019-01-21</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/585">14部电影角逐春节档 数量庞大取材多元</a>
                                <span>2019-01-19</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/575">股民胜诉，赵薇连带赔偿，法院判决英明！</a>
                                <span>2019-01-18</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/570">2019年，P2P网贷行业将是良性发展的一年</a>
                                <span>2019-01-17</span>
                            </li>
                            <li>
                                <a href="http://peizizhishu.com/post_detail/568">多家银行推出高收益率理财产品 最高预期收益率9.7%</a>
                                <span>2019-01-16</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <!-- 清除浮动盒子-->
            <div class="clear_box"></div>
        </ul>

    </div>
</div>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>



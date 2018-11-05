// pages/list/list.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    sum1 : '',
    fu : '',
    sum2 : '',
    end : '',
    num : '0',
  },
  //删除当前的所有值
  del:function(v)
  {
    this.setData({
      sum1: '',
      fu: '',
      sum2: '',
      end: '',
      num: '0',
    })
  },
  //删除当前输入的最后一个数
  del_one:function(v)
  {
    var sum1 = this.data.sum1
    var fu = this.data.fu
    var sum2 = this.data.sum2
    // sum1 = sum1.substr(0, sum1.length - 1)
    // consloe.log(sum1)
    if(fu == '')
    {
      sum1 = sum1.substr(0, sum1.length - 1)
    }
    else
    {
      sum2 = sum2.substr(0, sum2.length - 1)
    }
    this.setData({
      sum1:sum1,
      sum2:sum2,
    })
  },
  //获取符号
  h:function(v)
  {
    var fu = this.data.fu
    var num = this.data.num
    if(num !='')
    {
      this.data.sum1 = this.data.num
      this.setData({
        sum1: this.data.sum1,
      })
    }
    if(fu != '')
    {
      this.den()
      this.data.sum1 = this.data.num
      this.setData({
        sum1: this.data.sum1,
      })
    }
    var num = v.currentTarget.dataset.value
    this.setData({
      sum1 : this.data.sum1,
      fu: num,
      num: '',
    })
  },
  //获取数字
  d:function(v){
    var num = v.currentTarget.dataset.value
    if(this.data.fu == '')
    {
      this.data.sum1 = (this.data.sum1 + num)
    }
    else
    {
      this.data.sum2 = (this.data.sum2 + num)      
    }
    this.setData({
      sum1:this.data.sum1,
      sum2:this.data.sum2,
      num : '',
    })
  },
  //计算
  den:function()
  {
    var sum1 = this.data.sum1
    var fu = this.data.fu
    var sum2 = this.data.sum2
    var num = ''
    if(fu == '+')
    {
      num = parseFloat(sum1) + parseFloat(sum2)
    } else if (fu == '-') {
      num = sum1 - sum2
    } else if (fu == '*') {
      num = sum1 * sum2
    } else if (fu == '÷') {
      num = sum1 / sum2
    }
    this.setData({
      sum1: '',
      fu: '',
      sum2: '',
      end :'',
      num: num,
    })
   
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {

  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {

  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {

  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {

  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {

  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {

  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {

  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {

  }
})
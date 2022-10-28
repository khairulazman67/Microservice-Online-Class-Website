const {User} = require('../../../models');

module.exports = async (req, res)=>{
    const userIds =  req.query.user_ids || [];

    const sqlOptions = {
        attribute: ['id','name','email','role','profession','avatar']
    }

    if(userIds){
        sqlOptions.where = {
            id : userIds
        }
    }

    const users = await User.findAll(sqlOptions);

    return res.json({
        status : 'success',
        data : users
    })
}
<!-- Find the total marks for each student across all subjects. -->
db.student.aggregate([
{$group: {_id: "$name", totalMarks: {$sum: "$marks"}}}
])

<!-- Find the maximum marks scored in each subject. -->
db.student.aggregate([
{$group: {_id: "$subject", maxMarks: {$max: "$marks"}}}
])


<!-- Find the minimum marks scored by each student.-->
db.student.aggregate([
{$group: {_id: "$name", minMarks: {$min: "$marks"}}}
])

<!-- Find the top two subjects based on average marks.-->
db.student.aggregate([
{$group: {_id: "$subject", avgMarks: {$avg: "$marks"}}},
{$sort: {avgMarks: -1}},
{$limit: 2}
])


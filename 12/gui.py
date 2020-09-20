import sys, os
import wx
from wx.lib import buttons
from grab import algo_grabcut
import matplotlib.pyplot as plt
import matplotlib.image as mpimg
from PIL import Image

idOPEN = wx.ID_OPEN
idCLEAR = wx.ID_CLEAR
idEXIT = wx.ID_EXIT

#-------------------------------------------------------------------------------------------
class DoodleWindow(wx.Window):
	def __init__(self, parent, ID):
		wx.Window.__init__(self, parent, ID, style=wx.NO_FULL_REPAINT_ON_RESIZE)
		self.SetBackgroundColour("WHITE")
		self.filename=[]
		self.thickness = 5
		self.drawRegion = False
		self.RegionSet = False
		self.OpenCV = True
		self.SetColour("Cyan")
		self.pos_foreground = []
		self.pos_background = []
		self.pos = wx.Point(0,0)
		self.Regionpos1 = wx.Point(0,0)
		self.Regionpos2 = wx.Point(0,0)

		self.InitBuffer()

		self.SetCursor(wx.StockCursor(wx.CURSOR_PENCIL))


